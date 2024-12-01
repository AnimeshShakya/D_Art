import { Music } from 'lucide-react'

interface CategoryCardProps {
  title: string
  songCount: number
}

export function CategoryCard({ title, songCount }: CategoryCardProps) {
  return (
    <div className="relative group">
      {/* Enhanced glow effect */}
      <div className="absolute -inset-1.5 bg-gradient-to-r from-purple-600/15 to-blue-600/15 rounded-3xl blur-2xl group-hover:blur-3xl transition-all opacity-75 group-hover:opacity-100" />
      
      <div className="relative bg-black/40 backdrop-blur-md rounded-3xl p-8 h-full border border-white/5 group-hover:border-white/10 transition-colors">
        <div className="w-28 h-28 rounded-full bg-gradient-to-br from-gray-800/50 to-gray-900/50 flex items-center justify-center mb-8 group-hover:scale-105 transition-transform">
          <Music className="w-14 h-14 text-gray-400" />
        </div>
        
        <h3 className="text-white font-bold text-2xl mb-3">{title}</h3>
        <p className="text-gray-400 flex items-center space-x-2">
          <Music className="w-4 h-4" />
          <span>{songCount} Arts</span>
        </p>
      </div>
    </div>
  )
}

