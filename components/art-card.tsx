import { User } from 'lucide-react'

interface ArtCardProps {
  title: string
  artist: string
  views?: number
  listens?: number
  imageSrc?: string
}

export function ArtCard({ title, artist, views, listens, imageSrc }: ArtCardProps) {
  return (
    <div className="relative group">
      {/* Enhanced glow effect */}
      <div className="absolute -inset-1.5 bg-gradient-to-r from-purple-600/20 to-blue-600/20 rounded-3xl blur-2xl group-hover:blur-3xl transition-all opacity-75 group-hover:opacity-100" />
      
      <div className="relative bg-black/40 backdrop-blur-md rounded-3xl p-6 h-full border border-white/5 group-hover:border-white/10 transition-colors">
        <div className="aspect-[4/5] rounded-2xl bg-black/50 mb-6 overflow-hidden group-hover:scale-[1.02] transition-transform">
          {imageSrc && (
            <img 
              src={imageSrc} 
              alt={title}
              className="w-full h-full object-cover rounded-2xl"
            />
          )}
        </div>
        
        <h3 className="text-white font-semibold text-xl mb-2">{title}</h3>
        <p className="text-gray-400 text-sm mb-4">{artist}</p>
        
        <div className="flex items-center text-gray-400 text-sm">
          <User className="w-4 h-4 mr-1.5" />
          <span>
            {views ? `${views}k Views` : `${listens}k Listens`}
          </span>
        </div>
      </div>
    </div>
  )
}

