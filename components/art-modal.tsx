"use client"

import { useState } from "react"
import Image from "next/image"
import { Star, X } from "lucide-react"

interface ArtModalProps {
  isOpen: boolean
  onClose: () => void
  art: {
    id: number
    title: string
    price: number
    imageUrl: string
    description: string
    rating: number
    reviews: number
    dimensions: {
      height: number
      width: number
    }
  }
}

export function ArtModal({ isOpen, onClose, art }: ArtModalProps) {
  const [quantity, setQuantity] = useState(1)

  if (!isOpen) return null

  const totalPrice = art.price * quantity

  return (
    <div className="fixed inset-0 bg-black/80 flex items-center justify-center z-50 p-4">
      <div className="bg-gradient-to-b from-gray-900 to-black p-6 rounded-lg max-w-5xl w-full mx-4 relative">
        {/* Close button */}
        <button
          onClick={onClose}
          className="absolute top-4 right-4 text-gray-400 hover:text-white p-2"
        >
          <X className="w-6 h-6" />
        </button>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
          {/* Left side - Image */}
          <div className="relative aspect-square w-full bg-gray-800 rounded-lg overflow-hidden">
            <Image
              src={art.imageUrl}
              alt={art.title}
              fill
              className="object-cover"
            />
          </div>

          {/* Right side - Details */}
          <div className="space-y-6">
            <div>
              <div className="text-sm text-purple-400 mb-1">PREMIUM ARTWORK</div>
              <h2 className="text-2xl font-bold text-white mb-2">{art.title}</h2>
              
              {/* Rating */}
              <div className="flex items-center gap-2 mb-4">
                <div className="flex items-center">
                  {[...Array(5)].map((_, i) => (
                    <Star
                      key={i}
                      className={`w-4 h-4 ${
                        i < Math.floor(art.rating)
                          ? "text-yellow-400 fill-yellow-400"
                          : "text-gray-600"
                      }`}
                    />
                  ))}
                </div>
                <span className="text-gray-400">
                  {art.rating}/10 · {art.reviews} Reviews
                </span>
              </div>

              <p className="text-gray-400">{art.description}</p>
            </div>

            {/* Dimensions */}
            <div className="grid grid-cols-2 gap-4">
              <div className="bg-gray-900 p-4 rounded-lg">
                <div className="text-sm text-gray-400">HEIGHT</div>
                <div className="text-xl font-semibold text-white">
                  {art.dimensions.height}
                  <span className="text-sm text-gray-400 ml-1">cm</span>
                </div>
              </div>
              <div className="bg-gray-900 p-4 rounded-lg">
                <div className="text-sm text-gray-400">WIDTH</div>
                <div className="text-xl font-semibold text-white">
                  {art.dimensions.width}
                  <span className="text-sm text-gray-400 ml-1">cm</span>
                </div>
              </div>
            </div>

            {/* Price and Actions */}
            <div className="space-y-4">
              <div className="text-3xl font-bold text-white">
                ${totalPrice.toFixed(2)}
              </div>

              <div className="flex gap-4">
                <div className="flex items-center bg-gray-900 rounded-lg">
                  <button
                    onClick={() => setQuantity(Math.max(1, quantity - 1))}
                    className="px-4 py-2 text-gray-400 hover:text-white"
                  >
                    -
                  </button>
                  <span className="px-4 text-white">{quantity}</span>
                  <button
                    onClick={() => setQuantity(quantity + 1)}
                    className="px-4 py-2 text-gray-400 hover:text-white"
                  >
                    +
                  </button>
                </div>
                <button className="flex-1 bg-white text-black font-semibold py-2 rounded-lg hover:bg-gray-100">
                  ADD TO CART
                </button>
                <button className="flex-1 bg-gradient-to-r from-purple-900 to-blue-900 text-white font-semibold py-2 rounded-lg hover:from-purple-800 hover:to-blue-800">
                  BUY NOW
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
